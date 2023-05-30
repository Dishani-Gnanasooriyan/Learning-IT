import java.util.Scanner;
public class math
{
public static void main(String [] arg){

	
	Scanner scan=new Scanner(System.in);
	int value,square,sqroot,cube,sorce;
	System.out.print("enter the value  ");
	value=scan.nextInt();
	sorce=value;
	square=(sorce)*(sorce);
	sqroot=(square)/ (sorce);
	cube=(sorce)*(sorce)*(sorce);
	System.out.println("square is  "+square);
	System.out.println("sqroot is  "+sqroot);
	System.out.println("cube is  "+cube);
	
	
	}
	
	
	
}
