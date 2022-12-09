import java.util.Scanner;

public class tech {
    public static void main(String args[]) {
        int n, num, Fhf, Shf, digits = 0, SOS = 0;
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter a number to check: ");

        n = sc.nextInt();

        num = n;

        while (num > 0) {

            digits++;

            num = num / 10;
        }

        if (digits % 2 == 0) {
            num = n;

            Fhf = num % (int) Math.pow(10, digits / 2);

            Shf = num / (int) Math.pow(10, digits / 2);

            SOS = (Fhf + Shf) * (Fhf + Shf);

            if (n == SOS) {
                System.out.println(n + " is a tech number.");
            } else {
                System.out.println(n + " is not a tech number.");
            }
        } else {
            System.out.println(n + " is not a tech number.");
        }
    }
}