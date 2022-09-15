
package enquanto;


public class exercício2 {
    public static void main(String[] args) {
        
    int i = 0;
    int totalpar = 0;
    int totalimpar = 0;
       while(i < 100){
            if(i % 2 == 0){
             totalpar= totalpar + i;
          System.out.println(i + "par");
        }else{
            totalimpar =  totalimpar + i; 
            System.out.println(i + "ímpar");
        } 
            i++;
      }
       
        System.out.println( "");
        System.out.println("Total de numeros pares " + totalpar);
        System.out.println("");
         System.out.println( "");
        System.out.println("Total de numeros impares " + totalimpar);
        System.out.println("");
}
    }

