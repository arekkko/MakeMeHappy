function Person(firstName, lastName){

  this.firstName = firstName;
  this.lastName = lastName;

}

Person.prototype.sayHello = function(){
  console.log("Cześć! " + this.firstName + " " + this.lastName)
}

var jan = new Person("Jan", "Kowalski");
var anna = new Person("Anna", "Kowalska");
