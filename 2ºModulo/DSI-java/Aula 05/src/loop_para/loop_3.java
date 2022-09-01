
package loop_para;

//faça um algoritmo em java utilizando o laço de repetição 
//para de 1 até 100 separe os numeros pares dos impares

public class loop_3 {
    public static void main(String[] args) {
    int i;
        for(i = 0 ; i <= 100; i++){
            if(i % 2 == 0){
          System.out.println(i + "par");
        }else{
            System.out.println(i + "ímpar");
        }
          
      }
    }
}
