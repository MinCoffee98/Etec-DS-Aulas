

package Decisao;

import javax.swing.JOptionPane;

public class IF {
     public static void main (String[] args) {
         
         int idade = Integer.parseInt (JOptionPane.showInputDialog("Digite sua idade"));
         
         if (idade <=18) {
             System.out.println("Menor");
         }else {
             System.out.println("Maior");
         }
     }
}
