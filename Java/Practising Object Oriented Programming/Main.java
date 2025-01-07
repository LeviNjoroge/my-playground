// I am creating a program with three elements: 
// Student, Teacher, Subject

public class Main{

    public static void main(String[] args) {
        Teacher tr1 = new Teacher("Owili", "IN12/021", 200000);
        int salary = tr1.salary;
        System.out.println(tr1.tax(30000));
    }

}