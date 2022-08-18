
package Decisao;

import javax.swing.JOptionPane;

public class Media {
    public static void main (String[] args) {
        
        double media = Integer.parseInt (JOptionPane.showInputDialog("Digite a media"));
     
        if ((media > 0) && (media < 5)){
         System.out.println("RETIDO :(");
         
     }else if ((media >= 5) && (media <= 7)) {
         System.out.println("REGULAR :)");
         
     } else if ((media > 7) && (media <= 10)) {
         System.out.println("MUITO BOM :D");
     }else {
         System.out.println("ERRO");
     }
     
    }
}
