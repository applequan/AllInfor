package myproject.part2;
import info.gridworld.actor.*;
import info.gridworld.grid.*;

import java.awt.Color;


public class DancingBugRunner
{
    public static void main(String[] args)
    {
     int[] a={1,2,3,4,5};
        ActorWorld world = new ActorWorld();
        DancingBug alice = new DancingBug(a);

        alice.setColor(Color.ORANGE);        
        world.add(new Location(7, 8), alice);       
        world.show();

         
    }
}
