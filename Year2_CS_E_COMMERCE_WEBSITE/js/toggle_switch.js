function myFunction() {
    var target = document.getElementById("toggle_button");
    var target_two = document.getElementById("toggle_button_dark")
    
    if( target.style.display == "flex" ){
        target.style.display = "none"
        target_two.style.display = "flex"
        
    }else if (target_two.style.display == "flex" ){
        target_two.style.display= "none"
        target.style.display = "flex"
        
    }
    // CONTACT PAGE
    // var contact_page = document.getElementById("container-contact1");
    // contact_page.classList.toggle("container-contact1-dark-mode");

    var contact_page_title = document.getElementsByClassName("dark_target");
    var contact_page_img = document.getElementById("contact_img")
    for (let i = 0; i < contact_page_title.length; i++) {

        if(contact_page_title[i].style.color == "white"){
            contact_page_title[i].style.background = "white";
            contact_page_title[i].style.color = "black";
            contact_page_img.style.filter = "none"
        }else{
            contact_page_title[i].style.background = "rgb(30,30,30)";
            contact_page_title[i].style.color = "white";
            contact_page_img.style.filter = "invert(100%)"

        }
        
    }

    
    


    var element = document.body;
    element.classList.toggle("dark-mode");
    var collection = document.getElementById("navigationLightMode");
    collection.classList.toggle("navigationBar_dark_mode");

    var main_body = document.getElementById("main_body");
    main_body.classList.toggle("dark-mode-dark");
    
    var heading_h3 = document.getElementById("devices-container-heading-h3")
    if(heading_h3.style.borderBottom == "1px solid white"){
        heading_h3.style.borderBottom = "1px solid Black"
       
        
    }else if(heading_h3.style.borderBottom === "1px solid Black"){
        heading_h3.style.borderBottom = "1px solid white"

    }
    
    heading_h3.style.borderBottom = "1px solid white"
   
    
    const product_title = document.getElementsByClassName('product-details-title');
    for (let i = 0; i < product_title.length; i++) {
        product_title[i].classList.toggle("dark")
      }
 
    const product_box = document.getElementsByClassName("productdetails")
    for (let i = 0; i < product_box.length; i++) {
        product_box[i].classList.toggle("dark_transperent")
      }


    
    //   CONTACT PAGE

    



    
    
    

}

function changeToLaptop(){

    var collection = document.getElementById("desktop_container");
    var laptopCollection = document.getElementById("laptop_container")
    var laptop_button = document.getElementById("laptopChange_Button")
    var desktop_button = document.getElementById("desktopChange_Button")
    
    collection.style.display= "none"
    laptopCollection.style.display = "flex"

    laptop_button.style.backgroundColor = "#0281ff"
    laptop_button.style.color = "white"

    desktop_button.style.backgroundColor = "rgba(229, 222, 222, 0.677)"
    desktop_button.style.color = "black"
    

}
function changeToDesktop(){

    var collection = document.getElementById("desktop_container");
    var laptopCollection = document.getElementById("laptop_container")
    var desktop_button = document.getElementById("desktopChange_Button")
    var laptop_button = document.getElementById("laptopChange_Button")
    
    collection.style.display = "flex"
    laptopCollection.style.display = "none"

    desktop_button.style.backgroundColor = "#0281ff"
    desktop_button.style.color = "white"

    laptop_button.style.backgroundColor = "rgba(229, 222, 222, 0.677)"
    laptop_button.style.color = "black"

    
}