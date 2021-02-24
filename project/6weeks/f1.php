
Instance Initializer block:
There are three places in java where you can perform operations:

    method
    constructor
    block
	
*************************

	
final:
variable: final variable value canot be changed
method: cannot be override:
class: canot inherit an class



QNA:
Q) Is final method inherited?
  yes....
Q) What is blank or uninitialized final variable?
Que) Can we initialize blank final variable?
	Yes, but only in constructor. For example:
static blank final variable




A static final variable that is not initialized at the time of declaration is
known as static blank final variable. It can be initialized only in static block.
    class A{  
      static final int data;//static blank final variable  
      static{ data=50;}  
      public static void main(String args[]){  
        System.out.println(A.data);  
     }  
    } 
Q) What is final parameter?
    class Bike11{  
      int cube(final int n){  
       n=n+2;//can't be changed as n is final  
       n*n*n;  
      }  
      public static void main(String args[]){  
        Bike11 b=new Bike11();  
        b.cube(5);
b.cube(8);		
     }  
    }  
Q) Can we declare a constructor final?
No, because constructor is never inherited.



Polymorphism in Java
Runtime Polymorphism in Java or Dynamic Method Dispatch 

static and dynamic binding:
