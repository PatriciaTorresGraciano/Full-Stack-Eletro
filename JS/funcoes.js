function exibir_categoria(categoria){
    // alert(categoria)
    let elementos=document.getElementsByClassName('box_produto');
    for(var i=0; i<elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria==elementos[i].id)
            elementos[i].style="display:inline-block";
        else
            elementos[i].style="display:none";

    }
}

let exibir_todos=()=>{
    let elementos=document.getElementsByClassName('box_produto');
    
    for(var i=0; i<elementos.length; i++){
        elementos[i].style="display:inline-block";
    }

};

let destaque =(img) =>{
    if (img.width==240){
        img.width=120;
    }
    else{
        img.width=240
    }
    
};