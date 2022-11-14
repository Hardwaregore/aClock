function time() { 

    const date = new Date(); 
    const result = date.toLocaleTimeString("en-US", { 
    minute: "2-digit",
    hour: "2-digit", 
    
    second: "2-digit" 

    }); 
    
    document.getElementById("demo").innerHTML = `${result}`; 
    }
    
    setInterval('time();', 1000); 