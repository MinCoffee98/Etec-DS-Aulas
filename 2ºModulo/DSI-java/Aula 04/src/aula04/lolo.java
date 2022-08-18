package aula04;

import java.util.Scanner;

import javax.swing.JOptionPane;

public class lolo {
       public static void main(String[] args) { 
      try { 
        
            double a = Integer.parseInt(javax.swing.JOptionPane.showInputDialog ( "Digite um número: "));
            double b = Integer.parseInt(javax.swing.JOptionPane.showInputDialog ( "Digite um número: "));

            double soma = a + b;

            javax.swing.JOptionPane.showMessageDialog(null, a + " + " + b + " = " + soma);
            
     }  catch (Exception e) {
            javax.swing.JOptionPane.showMessageDialog(null, "Caracter Inválido");
           }   
}
}
