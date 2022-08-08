let i = 0; // current slide
let j = 4; // total slides

const dots = document.querySelectorAll(".dot-container button");
const images = document.querySelectorAll(".con");

setInterval(
    function next(){
        document.getElementById("content" + (i+1)).classList.remove("active");
        i = ( j + i + 1) % j;
        document.getElementById("content" + (i+1)).classList.add("active");
        indicator( i+ 1 );
    },2000);
    function indicator(num){
        dots.forEach(function(dot){
            dot.style.backgroundColor = "transparent";
        });
        document.querySelector(".dot-container button:nth-child(" + num + ")").style.backgroundColor = "#fff";
    }
    function dot(index){
        images.forEach(function(image){
            image.classList.remove("active");
        });
        document.getElementById("content" + index).classList.add("active");
        i = index - 1;
        indicator(index);
    }
function prev(){
    document.getElementById("content" + (i+1)).classList.remove("active");
    i = (j + i - 1) % j;
    document.getElementById("content" + (i+1)).classList.add("active");
    indicator(i+1);
}
function next(){
  document.getElementById("content" + (i+1)).classList.remove("active");
  i = ( j + i + 1) % j;
  document.getElementById("content" + (i+1)).classList.add("active");
  indicator( i+ 1 );
}
// Counter
const counters = document.querySelectorAll('.counter');
const speed = 100;

counters.forEach( counter => {
   const animate = () => {
      const value = +counter.getAttribute('value');
      const data = +counter.innerText;
     
      const time = value / speed;
     if(data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 1);
        }else{
          counter.innerText = value;
        }
     
   }
   window.addEventListener('scroll',()=>{
     let content = document.querySelector('.content');
     let contentPosition = content.getBoundingClientRect().top;
     let screenPosition = window.innerHeight;
     if (contentPosition<screenPosition){
      setInterval(animate(),3000);
     }
   })

});
// cookies
const cookieBox = document.querySelector(".cookie"),
    acceptBtn = cookieBox.querySelector("button");

    acceptBtn.onclick = ()=>{
      //setting cookie for 1 month, after one month it'll be expired automatically
      document.cookie = "CookieBy=HGE; max-age="+60;
      if(document.cookie){ //if cookie is set
        cookieBox.classList.add("hide"); //hide cookie box
      }else{ //if cookie not set then alert an error
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=HGE"); //checking our cookie
    //if cookie is set then hide the cookie box else show it
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
//cart
