import java.util.Scanner;
public class login
{
public static void main(String [] arg){
	Scanner scan=new Scanner(System.in);
	String pw,un,pws,uns;
	System.out.print("\nenter your user name  ");
	un=scan.nextLine();

	if(un.equals("anu")){System.out.println("\nenter your password  ");
		pw=scan.nextLine();
		
		if(pw.equals("anu123")){System.out.println(" \nyour user name and password is correct ");
		myMath();
		
		
		
		
		}
		else{System.out.println(" \nyour  password is incorrect ");}
		
	}
	else{System.out.println(" \nyour user name is incorrect ");}
		
	}
	
	public  static int myMath();
	{
	Scanner scan=new Scanner(System.in);
	int value,square,sqroot,cube,sorce,answer;
	System.out.print("enter the value  ");
	value=scan.nextInt();
	sorce=value;
	square=(sorce)*(sorce);   
	sqroot=(square)/ (sorce);
	cube=(sorce)*(sorce)*(sorce);
	answer=square;
	return answer;
	
	}
	
	
	
	
}
