import java.util.Scanner;
public class input
{
	public static void main(String argu[])
	{ int pw=123;
	System.out.println("enter the password");
		Scanner scan=new Scanner(System.in);
		int pin= scan.nextInt();
		if (pin== pw){ System.out.println(" Login successfull");
			System.out.println("Enter The First Number");
		double a= scan.nextDouble();
		System.out.println("Enter The Second Number");
		double b= scan.nextDouble();
		System.out.println("Enter The Third Number");
		double c= scan.nextDouble();
		if(a==c && c==a && b==a && a==b &&b==c && c==b){System.out.println("Three number are same numbers");}
		
		else{
		
		
		
		
		
		String r="Big Number is  ";
		if(a>b){
			if(a>c){System.out.println(r+a);}
		}
		else if (b>c){	System.out.println(r+b);}
		else{System.out.println(r+c);}	
		}
		}
	
	else if (pin!=pw){System.out.println("Wrong Pin Please Re compile the programme");}
	
}
		
		/*System.out.println("Enter The First Number");
		double a= scan.nextDouble();
		System.out.println("Enter The Second Number");
		double b= scan.nextDouble();
		System.out.println("Enter The Third Number");
		double c= scan.nextDouble();
		String r="Big Number is  ";
		if(a>b){
			if(a>c){System.out.println(r+a);}
		}
		else if (b>c){	System.out.println(r+b);}
		else{System.out.println(r+c);}*/
		
	

}