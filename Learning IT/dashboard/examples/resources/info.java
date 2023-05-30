

import java.util.*;
public class info
{
public static void main(String [] arg){
	Scanner sc=new Scanner(System.in);
	System.out.println("how many datas you enter");
	int x=sc.nextInt();
	String ict[]= new String[x];
	String auto[]= new String[x];
	String acr[]= new String[x];
	int totict=0,totauto=0,totac=0;
	for(int z=0;z<x;z++){
		
		
		System.out.println(" enter your course      (ict / auto  / ac )");
		String course=sc.next();
		System.out.println(" enter your name");
		if	(course.equals("ict")){ict[z]=sc.next();totict=totict+1;}
		
		if	(course.equals("auto")){auto[z]=sc.next();totauto=totauto+1;}
		
		if	(course.equals("ac")){acr[z]=sc.next();totac=totac+1;}
		
		
	}
	
	
	System.out.println("ict students are");		
	for(int y=0;y<x;y++){
			System.out.println(ict[y]);
			 }
			 
			 
			System.out.println("\nAuto mobile  students are");
			for(int y=0;y<x;y++){
			System.out.println(auto[y]);
			
			 }
			 
			 
			 System.out.println("\nAc repair students are");
			 for(int y=0;y<x;y++){
			System.out.println(acr[y]);
			
			 }
		System.out.println("\ntotal ict students  :  "+totict);
		System.out.println("\ntotal Auto mobile  students  :  "+totauto);
		System.out.println("\ntotal Ac Repair  students  :  "+totac);
		
		
	}
	
	}