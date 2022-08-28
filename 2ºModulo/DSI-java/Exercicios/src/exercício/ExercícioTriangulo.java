
package exercício;

import java.util.Scanner;

public class ExercícioTriangulo {
    
    @SuppressWarnings("empty-statement")
    public static void main(String[] args) {
        Scanner ler = new Scanner (System.in);
        
        int la;
        int lb;
        int lc;
       
       
        System.out.printf("Lado A: ");
        la = ler.nextInt();
        
        System.out.printf("Lado B: ");
        lb = ler.nextInt();
        
        System.out.printf("Lado C: ");
        lc = ler.nextInt();
        
       
        if (la == lb && lb == lc){ //equilatero
            while (la <= 0);
          System.out.println ("Triângulo Equilatero");
        }else if  (la != lb && lb != lc && la != lc){ // escaleno
            while (lb <= 0);
            System.out.println ("Triângulo Escaleno");
         }else if (la == lb || lb == lc || la!= lc){
             while (lc <= 0);
             System.out.println ("Triângulo Isósceles");
         }
                
    }
    
}
