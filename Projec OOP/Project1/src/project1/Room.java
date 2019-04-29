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
public abstract class Room {
    protected String num;
    
    
    public Room(String n){
        num = n;
    }
    
    
    public String getNum(){
        return num;
    }
    public abstract String toString();
}
