
package enquanto;


public class exercício3 {
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
     
        System.out.println("Total de numeros pares " + totalpar);
        
        System.out.println("Total de numeros impares " + totalimpar);
       
      
       if(totalpar > totalimpar){
          System.out.println("O total de numero par é maior que impar"+totalpar); 
       }else {
           System.out.println("O total de numero impar é maior que par"+totalimpar);
       }
    }
}


