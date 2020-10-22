window.addEventListener("scroll", function(){
    show = document.getElementById("navbarExpanded").classList
    nav = document.getElementById("main-navbar")

    if (this.scrollY >= 10 ){
        document.getElementById("form-searchPc").classList.add('d-md-block')
        document.getElementById("form-searchMd").classList.remove('d-none')

        /*
        nav.animate([
              { backgroundColor: "" },
              { backgroundColor: "#461b7e" }
            ], 500);
        */
        nav.classList.add("bg-ortopedia")

    }else{
        if (!show.contains('show')) {
            document.getElementById("form-searchPc").classList.remove('d-md-block')
            document.getElementById("form-searchMd").classList.add('d-none')

            /*
            nav.animate([
              { backgroundColor: "#461b7e" },
              { backgroundColor: "" }
            ], 500);
            */

            nav.classList.remove("bg-ortopedia")

        }
    }
  }, false);
function expand(){
    show = document.getElementById("navbarExpanded").classList
    nav = document.getElementById("main-navbar")


    if (show.contains('show') && this.scrollY <= 10) { //cerrando
        nav.animate([
              { backgroundColor: "#461b7e" },
              { backgroundColor: "" }
            ], 500);
        nav.classList.remove("bg-ortopedia")
    }else{
        nav.animate([
              { backgroundColor: "" },
              { backgroundColor: "#461b7e" }
            ], 500);
        nav.classList.add("bg-ortopedia")
    }

}

