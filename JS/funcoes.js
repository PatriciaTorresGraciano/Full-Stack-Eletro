function redirecionar(){
    window.location.href="./produtos.php";
}




function exibir_categoria(categoria){

    
   
    // alert(categoria)
    let elementos=document.getElementsByClassName('box_conteudo');
    for(var i=0; i<elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria==elementos[i].id)
            elementos[i].style="display:inline-block";
        else
            elementos[i].style="display:none";

    }
}

let exibir_todos=()=>{
    let elementos=document.getElementsByClassName('box_conteudo');
    
    for(var i=0; i<elementos.length; i++){
        elementos[i].style="display:inline-block";
    }

};

let destaque =(img) =>{
        img.width=350;
    };


let destaque_voltar_tamanho =(img) =>{
    
        img.width=240;
    
};

let limparCampos=()=>{
    document.getElementById('nome').value='';
    document.getElementById('mensagem').value='';
}