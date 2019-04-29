/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package project1;

/**
 *
 * @author Fujimoto
 */
public class Suit extends Room {
    private boolean seaside;
    public Suit(String n,boolean b) {
        super(n);
        seaside = b;
    }
    public boolean getSeaside(){
        return seaside;
    }

    public String toString(){
        if(seaside){
            return num+" Suite 1,200Bath(Seaside)";
        }
        else{
            return num+" Suite 1,000Bath";
        }
        
    }
}
