$(document).ready(function(){
    var baseurl = $("#baseurl").val()+"index.php";
    $('.m_new').hide();
    $('.m_home').show();
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a:not(.dropdown-toggle)').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
    $("#myBtn2").click(function(){
        $("#myModal").modal();
    });
    $("#new_user").on('click',function(e){
        e.preventDefault();
        $('.m_home').hide();
        $('.m_new').fadeIn('slow');
    });
    $("#go_back").on('click',function(e){
        e.preventDefault();
        $('.m_new').hide();
        $('.m_home').fadeIn('slow');        
    });
    $('#password').on('keyup', function(e){ 
        e.preventDefault();
        $('#result').html(checkStrength($('#password').val())); 
    });
    $("#email").on('keyup',function(e){
        e.preventDefault();
        var email = $.trim($("#email").val());
        if(email.length != 0){
            if(isEmail(email)){
                $.ajax( 
                   {
                    type: "POST",
                    url: baseurl+"/home_controller/does_exist",
                    data: 'email='+email,
                    cache: false, 
                    success: function(response){            
                        try{    
                            if(response =='No'){
                                $("#check_text").removeClass("text-warning");
                                $("#check_text").addClass("text-success");
                                $("#check_text").html("Username is available");
                                $('#begin').prop('disabled',false);
                            }  
                            else if(response == 'Exists'){
                                $("#check_text").removeClass("text-success");
                                $("#check_text").addClass("text-danger");
                                $("#check_text").html("User already exists. Please choose a different username.");
                                $('#begin').prop('disabled',true);
                            }             
                        }
                        catch(e) {   
                            console.log(e);
                        }   
                    },
                    error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }           
                }); 
            }else{
                $("#check_text").empty();
                $('#begin').prop('disabled',true);
            }       
        }else{
            $("#check_text").empty();
            $('#begin').prop('disabled',true);
        }
    });
    /*$('#cpassword').on('keyup',function(e){
        e.preventDefault();
        var p1 = $('#password').val();
        var p2 = $(this).val();
        var check = p1.localeCompare(p2);
        console.log(check);
        if(check === 0){
            $('#result_match').addClass('text-success');
            $('#result_match').removeClass('text-danger');
            $('#result_match').html('Passwords Match');
        }else{
             $('#result_match').html('Passwords dont match');
             $('#result_match').removeClass('text-success');
             $('#result_match').addClass('text-danger');
        }
    }); */
    $('[data-toggle="tooltip"]').tooltip(); 
    $('#add_new_user').on('submit',function(e){
    e.preventDefault();
    email = $.trim($('#email').val());
    password = $.trim($('#password').val());
    if (confirm("Are you sure you want to verify the given credentials?")){     
        $.ajax( 
           {
            type: "POST",
            url: baseurl+"/home_controller/add_user",
            data: $('#add_new_user').serialize(),           
            cache: false,
            success: function(recieved){   
              try{  
                  if(recieved == 'Added'){
                    $('#username').val(email);
                    $('#pass').val(password);
                    $('#submitUser').trigger('submit');
                  } else if(recieved == 'No'){
                    alert("Something happened. Try again!");
                  }          
              }catch(e) {   
                console.log(e);
              }   
            },
            error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }           
          });        
        }
    });

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function checkStrength(password){ 
        var strength = 0; 
        if(password.length === 0){
            return "";
        }
        if (password.length < 6) { 
            $('#result').removeClass(); 
            $('#result').addClass('short');
            $('#result').addClass('text-danger');  
            return 'Too short(minimum 6 characters)';
        } 
        if (password.length > 7) {strength += 1;}
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {strength += 1;} 
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) {strength += 1;} 
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {strength += 1} 
        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,",%,&,@,#,$,^,*,?,_,~])/)) {strength += 1;} 
        if (strength < 2 ) { 
            $('#result').removeClass(); 
            $('#result').addClass('weak'); 
            $('#result').addClass('text-warning'); 
            return 'Weak'; 
        } else if (strength == 2 ){ 
            $('#result').removeClass(); 
            $('#result').addClass('good'); 
            $('#result').addClass('text-success'); 
            return 'Good'; 
        } else { 
            $('#result').removeClass(); 
            $('#result').addClass('strong'); 
            $('#result').addClass('text-primary'); 
            return 'Strong'; 
        } 
    }
}); 
