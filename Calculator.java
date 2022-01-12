public final class Calculator {

    private static Calculator calculator = null;

    private Calculator() {
    }

    public static Calculator getInstance() {
        synchronized (Calculator.class) {
            if (calculator == null) {
                calculator = new Calculator();
            }
            return calculator;
        }
    }

    public int add(int a, int b) {
        return a + b;
    }

    @Override
    protected Object clone() throws CloneNotSupportedException {
        throw new CloneNotSupportedException();
    }
}