import java.util.Scanner;
public class multi
{
public static void main(String [] arg){
	Scanner scan=new Scanner(System.in);
	int value,rows;
	System.out.print("enter multiplication value  ");
	value=scan.nextInt();
	System.out.print(" how many rows you want  ");
	rows=scan.nextInt();
	for(int x=1;x<=rows;x++){
		System.out.println(x + " x " + value + " = "+x*value);
		
		
	}
	
	
}
}