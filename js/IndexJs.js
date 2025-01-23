function error1(){
    document.getElementById('er1').style.display="block";
    // document.getElementById('er1').style.color="red";
    document.getElementById('tittle').style.display="none";
    // document.getElementById('space').style.display="block";
    setTimeout( function er2(){
        document.getElementById('er1').style.display="none",
        document.getElementById('tittle').style.display="block";
        // document.getElementById('space').style.display="none";
            
    },1000
           
        );
      
    
} 