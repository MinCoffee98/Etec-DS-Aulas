
package exercício;

public class Exercício2 { // permutação
    public static void main(String[] args) {

      int a = 1;
      int b = 2;
      int c =3;
      
      if ((a < b) && (b < c) && (a < c)){
         System.out.println("1 2 3 ");
    }else if((a < b) && (b > c) && (c > a)){
        System.out.println("1 3 2");
    }else if ((b < a) && ( c > a) && ( b < c)){
        System.out.println("2 1 3");
    }
       
    
     
       
     
       
    }
}
