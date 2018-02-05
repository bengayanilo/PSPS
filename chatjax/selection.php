
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div id="proflist"></div>

<script>
    
    
    
    function load(){
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'db_retreive.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            

            if(this.status == 200){
                var msg = JSON.parse(this.responseText);
          
                var output = '<ul style="list-style: none;">';
          
            for(var i in msg){
                output +=   '<li>'+
                            '<button onclick="chatid(this);" value="'+msg[i].user_id+'">'+msg[i].fullName+'</button>'+
                            '<li>';
                }   
                output += '</ul>';
                document.getElementById('proflist').innerHTML = output;
            }   
        }

        xhr.send();
    }
    setInterval(load,500);

    function chatid(ele) {
        var Xid;
        var par = "checkchatid="+ele.value;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'chatlog.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            if(this.status == 200){

                    var msg = JSON.parse(this.responseText);

                    output = '';
                    for(var i in msg){
                        window.open('index.php?target='+ele.value+'&chatid='+msg[i].chat_id, 'newwindow', 'width=400, height=500');
                        }
            }
        }
        xhr.send(par);
        
    }

</script>
</body>
</html>