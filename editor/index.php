<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/editor.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Guest Editor</title>
</head>
<body>
    <header class="bg-info text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Guest Editor</h1>
                </div>
            </div>
        </div>
    </header>
    
    <main class="p-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="text-center">Guest Form</h2>
                    <form action="processes/add.php" method="post">
                        <div class="form-group">
                            <label for="">Guest Name</label>
                            <input class="form-control" type="text" name="name" required> 
                        </div>
                        <div class="form-group">
                            <label for="">Allotted</label>
                            <input class="form-control" type="number" name="alotted" required> 
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Add</button>
                        </div>
                    </form>

                </div>
                <div class="col-md-8">
                    <h2 class="text-center">Guest List</h2>
                    <table class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Allotted</th>
                                <th>Will Attend</th>
                                <th>Declined</th>
                                <th>URL</th>
                                <th>TinyURL</th>
                                <th>Date Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            require_once("processes/config.php");

                            $stmt = $db->prepare("SELECT * FROM guests");
                            $stmt->execute();
                            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            $slots = 0;
                            $will_attend = 0;
                            $will_not_attend = 0;
                            $c = 0;
                            foreach($data as $key => $value){
                                $slots+=$value["alotted"];
                                $c++;
                                if($value["decline"] != 1){
                                    $will_attend+=$value["will_attend"];
                                }else{
                                    $will_not_attend += $value["alotted"];
                                }
                                echo '<tr>';
                                    echo '<td>'.$c.'</td>';
                                    echo '<td>'.$value["name"].'</td>';
                                    echo '<td>'.$value["alotted"].'</td>';
                                    echo '<td>'.$value["will_attend"].'</td>';
                                    echo '<td>'.$value["decline"].'</td>';
                                    echo '<td>
                                    <a target="_blank" href="http://'.$_SERVER["HTTP_HOST"]."/index.php?ref=".$value["url"].'" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>  
                                    <button value="http://'.$_SERVER["HTTP_HOST"]."/index.php?ref=".$value["url"].'" class="btn btn-sm btn-warning copy"><i class="fas fa-copy"></i></button>
                                    </td>';
                                    if($value["tinyurl"] == ""){
                                        echo '<td class="cont'.$value["id"].'"><button class="btn btn-success btn-sm generate_tiny" data-source="'.$value["id"].'" data-record="http://'.$_SERVER["HTTP_HOST"]."/index.php?ref=".$value["url"].'">Generate</button></td>';

                                    }else{
                                        echo '<td>'.$value["tinyurl"].'
                                            <button class="btn btn-secondary btn-sm copytiny" data-record="'.$value["tinyurl"].'">
                                                <i class="fas fa-copy"></i>
                                            </button>
                                        </td>';
                                    }
                                    echo '<td>'.$value["timestamp"].'</td>';
                                    echo '<td><a class="btn btn-sm btn-danger" href="processes/delete.php?ref='.$value["id"].'">Delete</a></td>';
                                echo '</tr>';
                            }
                        ?>
                        </tbody>
                    </table>

                    <h3>Alotted Slots: <?php echo $slots; ?></h3>
                    <h3>Will Attend: <?php echo $will_attend; ?></h3>
                    <h3>Will Not Attend: <?php echo $will_not_attend; ?></h3>
                </div>
            </div>
        </div>
    </main>
    <script src="../js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $("table").DataTable({});
       $(document).on("click",".copy",function(){
            var value = $(this).val()
            // navigator.clipboard.writeText(value);
            const el = document.createElement('textarea');
            el.value = value;	//str is your string to copy
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');	// Copy command
            document.body.removeChild(el);
            alert("Copied: "+value);
       })
        $(document).on("click",".copytiny",function(){
            var value = $(this).attr("data-record")
            // navigator.clipboard.writeText(value);
            const el = document.createElement('textarea');
            el.value = value;	//str is your string to copy
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');	// Copy command
            document.body.removeChild(el);
            alert("Copied: "+value);
       })
       $(document).on("click",".generate_tiny",function(){
           var link = $(this).attr("data-record")
           var source = $(this).attr("data-source")
           $.ajax({
                url:"https://tinyurl.com/api-create.php?url="+link,
                type:"POST",
                beforeSend:function(){
                    $(".cont"+source).html("Generating...")
                },
                success:(r)=>{
                    var html = ''+r+ 
                    '<button class="btn btn-secondary btn-sm copytiny" data-record="'+r+'">'+
                    '<i class="fas fa-copy"></i>'+
                    '</button>'
                    ''
                    $(".cont"+source).html(html)
                    $.ajax({
                        url:"processes/updateURL.php?ref="+source,
                        data:{
                            url:r
                        },
                        type:"POST",
                        success:(e)=>{
                            
                        }
                    })
                }
           })
       });
    </script>
</body>
</html>