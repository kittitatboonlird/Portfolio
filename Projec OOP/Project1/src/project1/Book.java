/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package project1;

public class Book {
    private Room r;
    private Customer c;
    private int date,month,year;
    
    public Book(int d,int m,int y,Room b,Customer cu){
        date = d;
        month = m;
        year = y;
        r = b;
        c = cu;
    }
    public Room getRoom(){
        return r;
    }
    public int getDate(){
        return date;
    }
    public int getMonth(){
        return month;
    }
    public int getYear(){
        return year;
    }
}
