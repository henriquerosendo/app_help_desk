function verficarCheckBox() {
    // Get the checkbox
    var checkVer = document.getElementsByClassName("checkVer");
  
    // If the checkbox is checked, display the output text
    if (checkVer.checked == true){
        // criando alert com sweetalert
        document.getElementById('verificarCheckS').addEventListener('click', function(){
            Swal.fire({
            icon: 'success',
            title: 'Chamado salvo com sucesso',
            timer: 1500
            })
        })
        } else {
            Swal.fire(
                'Você selecionou algum serviço?',
                'Porfavor, selecione algum serviço',
                'question'
              )
        }
  }


