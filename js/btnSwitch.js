const btn = document.getElementById("toggleSectionBtn");
const chart_cont=document.getElementById("chart-section");
const table_cont=document.getElementById("table-section");

    btn. addEventListener("click", () => {
        
        if(btn.textContent==='Chart'){
            btn.textContent = "Table";
            chart_cont.style.display='none';
            table_cont.style.display='block';
            btn.style.transform="scale(1.1)";
            btn.style.transitionDuration="3s";
            
            
            
        }else{
            btn.textContent = "Chart";
            chart_cont.style.display='block';
            table_cont.style.display='none';
            btn.style.transform="scale(1)";
            btn.style.transitionDuration="3s";
        }
        
    }); 
    


