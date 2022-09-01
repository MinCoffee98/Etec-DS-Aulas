
package loop_para;



public class loop_somar {
    public static void main(String[] args) {
        
    int i;
    int totalpar = 0;
    int totalimpar = 0;
        for(i = 0 ; i <= 100; i++){
            if(i % 2 == 0){
             totalpar= totalpar + i;
          System.out.println(i + "par");
        }else{
            totalimpar =  totalimpar + i; 
            System.out.println(i + "ímpar");
        }          
      }
        System.out.println( "");
        System.out.println("Total de numeros pares " + totalpar);
        System.out.println("");
         System.out.println( "");
        System.out.println("Total de numeros impares " + totalimpar);
        System.out.println("");
}
    }

