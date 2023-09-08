
function validarUser(e) {

    const user = document.querySelector('input#user')
    const pass = document.querySelector('input#passwd')

    const usuario = String(user.value)
    const passwd = String(pass.value)

    if (usuario == '' || passwd == '') {  
         
        if (!isNaN(usuario)) {

            alert("Números no lugar do usuário")

        } else {

            alert(`Favor preencher os dados corretamente!`)

        }

    } else {

        alert(
            `Bem-vindo: 
             Usuário: ${usuario}
             Senha: ${passwd}`
        )
    }
}
