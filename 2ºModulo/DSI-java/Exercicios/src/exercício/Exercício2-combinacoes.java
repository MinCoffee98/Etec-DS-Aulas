
package exercício;

public class Exercício2-combinacoes { // permutação
    public static void main(String[] args) {

      int a = 1;
      int b = 2;
      int c =3;
      
      if ( a == 1 && b == 2 && c == 3) {
            System.out.println( a + " " + b + " " + c );
        }
        else if ( a == 1 && b == 3 && c == 2) {
            System.out.println( a + " " + c + " " + b );
        }
        
        // Colocando na sequência das possibilidades 213 e 231
        else if ( a == 2 && b == 1 && c == 3) {
            System.out.println( b + " " + a + " " + c );
        }
        else if ( a == 2 && b == 3 && c == 1) {
            System.out.println( c + " " + a + " " + b );
        }
        
        // Colocando na sequência das possibilidades 312 e 321
        else if ( a == 3 && b == 1 && c == 2) {
            System.out.println( b + " " + c + " " + a );
        }
        else {
            System.out.println( c + " " + b + " " + a );
        }
       
    }
}
