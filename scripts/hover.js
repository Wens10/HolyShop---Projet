const navbar=document.querySelector('.navbar');
const parfum=document.querySelector('.Parfum');
const maquillage=document.querySelector('.Maquillage');
const cheveux=document.querySelector('.Cheveux');



navbar.childNodes.forEach((child)=>{
    child.addEventListener('mouseenter',()=>{
        if(child.classList.contains('parfume')){
            parfum.style.display='flex';
            maquillage.style.display='none';
            cheveux.style.display='none';

        } else if(child.classList.contains('maquillage')){
            maquillage.style.display='flex';
            parfum.style.display='none';
            cheveux.style.display='none';
            visage.style.display='none';
            corps.style.display='none';
        } else if(child.classList.contains('cheveux')){
            cheveux.style.display='flex';
            parfum.style.display='none';
            maquillage.style.display='none';
 
        } 
    });

});

parfum.addEventListener('mouseleave',()=>{

    parfum.style.display='none';
});
maquillage.addEventListener('mouseleave',()=>{

    maquillage.style.display='none';
});
cheveux.addEventListener('mouseleave',()=>{

    cheveux.style.display='none';
});
