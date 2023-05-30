import java.util.Scanner;
public class input2
{
	public static void main(String argu[])
	{ int pw=123,x=0;
	int i=1,s=1;
	String r="Big Number is  ";
	Scanner scan=new Scanner(System.in);
	do
	{
	
	System.out.println("enter the password");
		
		int pin= scan.nextInt();
		if (pin== pw){ System.out.println(" Login successfull");
			
			
		System.out.println("Enter The First Number");
		double a= scan.nextDouble();
		System.out.println("Enter The Second Number");
		double b= scan.nextDouble();
		System.out.println("Enter The Third Number");
		double c= scan.nextDouble();
		if(a==c && c==a && b==a && a==b &&b==c && c==b) {System.out.println("Three Numbers are Same ");}
		}
		
		   
		else {
		
		
		if(a>b){
			if(a>c){System.out.println(r+a);}
		}
		else if (b>c){	System.out.println(r+b);}
		else{System.out.println(r+c);
		break;}	
		}
		}
	
	else if (pin!=pw){System.out.println("Wrong Pin Please Re Enter the programme the Programme");
	}
	i++;
	}while (i<=3);
	
}
		
		
	

}
