import java.util.Scanner;
public class arrayings2
{
public static void main(String [] arg){
	Scanner scan=new Scanner(System.in);
	int y ;
	System.out.println("How may records you enter");
	y=scan.nextInt();
	double sal [ ] [ ] = new double [y] [3];
	String name[ ] = new String[ y];
	
	
	
for(int x=0;x<sal.length;x++){
	//System.out.println("please enter Your name");
	//name[x]=scan.next();
	System.out.println("please enter the salary");
	sal[x][0]=scan.nextInt();
	
	sal[x][1]=sal[x][0]*10/100;
	sal[x][2]=sal[x][0]*12/100;
	
	
	}
	
	

	
	
	for(int x=0;x<sal.length;x++){
	System.out.println("Your salary is "+sal[x] [0]+"        Allowance is "+sal[x] [1]+"       Your EPF is   "+sal[x][2]);

	}
	
	
	
	}
	
	}