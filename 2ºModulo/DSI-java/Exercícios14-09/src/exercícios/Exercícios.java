
package exercícios;
//tabuada
public class Exercícios {

    public static void main(String[] args) {
        for(int i = 1; i <= 10; i++){
            for(int j = i; j <= 10; j++){
                int res = i*j;
                
                System.out.println(i + "x" + j + "=" + res);
            }
            System.out.println("");
        }
        
        
    }
    
}
