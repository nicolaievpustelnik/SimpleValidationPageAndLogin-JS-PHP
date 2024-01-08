$(document).ready(function(){

    $('#eye2').hide();
    $('#eye4').hide();
    

    $('#eye1').click(function(){
        
        $('#eye1').hide();
        $('#eye2').show();
        
        $('#pass').attr('type','text')
    });
    $('#eye2').click(function(){
        
        $('#eye2').hide();
        $('#eye1').show();
        
        $('#pass').attr('type','password')
    });
    
    $('#eye3').click(function(){
        
        $('#eye3').hide();
        $('#eye4').show();
        
        $('#pass2').attr('type','text')
    });
    $('#eye4').click(function(){
        
        $('#eye4').hide();
        $('#eye3').show();
        
        $('#pass2').attr('type','password')
    });

});