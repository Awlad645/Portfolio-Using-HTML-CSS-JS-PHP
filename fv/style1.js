var click = document.getElementById("send");
      click.onclick = function validate(){
        var name = document.getElementById("us");
        var pass = document.getElementById("pass");
        var em = document.getElementById("email");
        var subj = document.getElementById("subject");
        var msg = document.getElementById("msg");

        if(name.value == ''){
          alert("UserName can't be empty");
        }
        var str=name.value.slice(0,1);
        if(str=='_'||str=='$' || str=='0'|| str=='1' || str=='2' || str=='3' || str=='4' || str=='5' || str=='6' || str=='7' || str=='8' || str=='9' ){
            alert("UserName is not valid");
                  
           }

        else if(em.value == ''){
          alert("Give your Email");

        }

        else if(pass.value == '' ){
          alert("Give your Password");
        }
        else if(pass.value.length<5 || pass.value.length >15){
          alert("password is not valid");
      }}