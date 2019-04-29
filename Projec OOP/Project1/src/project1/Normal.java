/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package project1;

public class Normal extends Room {
    private boolean poolside;
    public Normal(String n,boolean b) {
        super(n);
        poolside = b;
    }
    
    public boolean getPoolside(){
        return poolside;
    }

    public String toString(){
       if(poolside){
            return num+" Norrmal 700Bath(Poolside)";
        }
        else{
            return num+" Normal 500Bath";
        }
    }
}