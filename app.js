function preenchimento()
{
    if(document.getElementById('preenchimentoSim').checked == true){
        document.getElementById('qualText').disabled = false;
    } else if ( document.getElementById('PreenchimentoNao').checked == true){
        document.getElementById('qualText').disabled = true;
       
    }
}
function preenchimento2()
{
    if(document.getElementById('preenchimentoSim2').checked == true){
        document.getElementById('qualText2').disabled = false;

    } else if ( document.getElementById('PreenchimentoNao2').checked == true){
        document.getElementById('qualText2').disabled = true;
       
    }
}