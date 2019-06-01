class Person{
    
    constructor(firstName, lastName){
         this.firsName = firstName; 
        this.lastName = lastName; 
    }
    
    sayHello(){
        console.log(`Nazywam się ${this.firsName} $Pthis.lastName`); 
    }
    
}



/*
function Person(firstName, lastName){
    
    this.firsName = firstName; 
    this.lastName = lastName; 

}
*/



var jan = new Person("Jan", "Kowlaski"); 