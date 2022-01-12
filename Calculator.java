public final class Calculator {

public class Calculator implements CalculationStrategy {

    @Override
    public int calculate(int value1, int value2) {
        return value1 + value2;
    }
}


package oopdesign.calculator;

public interface CalculationStrategy {

    int calculate(int value1, int value2);
}


package oopdesign.calculator;

public class Calculator {

    public static Calculator instance = null;

    CalculationStrategy calculationStrategy;

    public void setCalculationStrategy(CalculationStrategy calculationStrategy) {
        this.calculationStrategy = calculationStrategy;
    }

    public static Calculator getInstance(){
        if(instance == null){
            instance = new Calculator();
        }
        return instance;
    }

    public int calculate(int value1, int value2) {
       return calculationStrategy.calculate(value1, value2);
    }
}


package oopdesign.calculator;

public class CalculatorMain {

    public static void main(String[] args) {

        Calculator c = Calculator.getInstance();

        c.setCalculationStrategy(new AdditionStrategy());
        System.out.println(c.calculate(5 ,2));

        c.setCalculationStrategy(new SubtractionStrategy());
        System.out.println(c.calculate(5 ,2));

        c.setCalculationStrategy(new MultiplicationStrategy());
        System.out.println(c.calculate(5 ,2));

        c.setCalculationStrategy(new DivideStrategy());
        System.out.println(c.calculate(5 ,2));
    }
}


package oopdesign.calculator;

public class DivideStrategy implements CalculationStrategy {

    @Override
    public int calculate(int value1, int value2) {
        return value1 / value2;
    }
}


package oopdesign.calculator;

public class MultiplicationStrategy implements  CalculationStrategy{

    @Override
    public int calculate(int value1, int value2) {
        return value1 * value2;
    }
}

package oopdesign.calculator;

public class SubtractionStrategy implements CalculationStrategy {

    @Override
    public int calculate(int value1, int value2) {
        return value1 - value2;
    }
}
   