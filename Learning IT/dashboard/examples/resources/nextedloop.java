import java.util.Scanner;
public class nextedloop
{//class
		
	public static void main(String argu[])
	{//main	
	String succesMsg="please follow the instruction";
		short z;
		boolean l=true;
		Scanner scan=new Scanner(System.in);
		
		for(;l;){
		System.out.println("Enter the start Number");
		short start=scan.nextShort();
		System.out.println("Enter the end Number");
		short ends=scan.nextShort();
		  if(ends>10){ends=10;}
		if(start>=ends && ends<=start)
		{
			System.out.println("Wrong input"+"\n");
			boolean m=true;
			short x=0;
			
			while(m){
				
			System.out.println("please press - 1 - to exit"+"\t"+"please press - 0 - to Retry");
			
			z=scan.nextShort();
			x++;
			
			if(z==1){l=false;m=false;}
			else if(z==0){l=true;m=false;}
			if(x==3){System.out.println("your system is block"+"\n"+"please enter your age");
			int age=scan.nextInt();
			System.out.println("please enter your birth year");
			int year=scan.nextInt();
			System.out.println("please enter your weight");
			int weight=scan.nextInt();
			int pass=(age+year+weight)*10*5;
				System.out.println(" your password is "+pass);
				System.out.println(" please enter your password is ");
				int code=scan.nextInt();
				if(code==pass){System.out.println(" password is correct ");m=false;succesMsg="";}
				else {System.out.println(" password is in correct ");m=false;l=false;succesMsg="this programme is close";}
				}
			if(z!=0 && z!=1){System.out.println(succesMsg);}
			
			}
			
		}
			
		else{
		for(int x=start;x<=ends;x++){
			
			for(int y=start;y<=ends;y++){
			System.out.print(x+" x "+ y +" =   "+y*x+"\t");
			}
		System.out.println();
		}
		break;
		}	
		}	
		}//main

	}// class 

