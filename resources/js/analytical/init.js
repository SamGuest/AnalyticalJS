import { init } from "./analytical.js";
let System = new init();

window.onload = function(){

        /* Initilising Analytical.JS */
        startUp()
        
        function startUp(){
            if(System.vars.failed == false){
                if(System.vars.userIP != ""){
                    init();
                } else {
                    setTimeout( () => { startUp(); }, 1 );
                }
            }
        }

        window.onbeforeunload = function (event) {
            fetch("http://analyticaljs.test/api/unmount/"+System.vars.id);
        }

        function init(){
            System.debugMessage("Analytical.js intilised");
            System.debugMessage(System.vars.referrerDomain);
        }
}
