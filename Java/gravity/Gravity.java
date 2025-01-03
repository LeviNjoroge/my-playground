
public class Gravity {

    public static double falling_Distance(int time){
        double distance;
        final double g = 9.8;

        distance = 0.5*g*time*time;

        return distance;
    }

    public static void main(String[] args) {
        for(int i = 1; i<=10; i++){
            System.out.println("at t: "+i+" seconds, the object has fallen "+falling_Distance(i)+" meters.");
        }
    }
    
}