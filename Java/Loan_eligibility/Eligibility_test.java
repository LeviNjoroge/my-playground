public class Eligibility_test {

    public static void Test(int salary, int employment_duration){
        if (salary > 20000 && employment_duration >=3) {
            System.out.println("You qualify for a loan!");
        }
        else{
            System.out.println("Unfortunately, you do not qualify for a loan!\nTry again later.");
        }
    }
}
