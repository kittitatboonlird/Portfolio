/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package project1;

import java.util.ArrayList;

public class Books {
    private ArrayList<Book> booking; //สร้าง booking เป็นตัวแปรชนิด array list ของ book
    
    public Books(){//bs ใน Frame1
        booking = new ArrayList<Book>();
    }
    public boolean isAvailable(int d,int m,int y,Room r){
        for(int i=0;i<booking.size();i++){
            Book b = booking.get(i);
            if(d==b.getDate()&&m==b.getMonth()&&y==b.getYear()&&r==b.getRoom()){
                return false;
            }
        }
        return true;
    }
    public boolean addBook(Book bo){
        if(isAvailable(bo.getDate(),bo.getMonth(),bo.getYear(),bo.getRoom())){
            booking.add(bo);
            return true;
        }
        return false;
    }
    /*public boolean deleteBook(int d,int m,int y,Room r){
        for(int i=0;i<booking.size();i++){
            Book b = booking.get(i);
            if(d==b.getDate()&&m==b.getMonth()&&y==b.getYear()&&r==b.getRoom()){
                booking.remove(i);
                return true;
            }
        }
        return false;
    }*/
}
