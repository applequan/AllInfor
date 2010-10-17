package myproject.part2;

import info.gridworld.actor.ActorWorld;
import info.gridworld.actor.Flower;
import info.gridworld.actor.Jumper;
import info.gridworld.actor.Rock;
import java.awt.Color;
/**
 * This class runs a world that contains a bug and a rock, added at random
 * locations. Click on empty locations to add additional actors. Click on
 * populated locations to invoke methods on their occupants. <br />
 * To build your own worlds, define your own actors and a runner class. See the
 * BoxBugRunner (in the boxBug folder) for an example. <br />
 * This class is not tested on the AP CS A and AB exams.
 */
public class JumperRunner
{
    public static void main(String[] args)
    {
        ActorWorld world = new ActorWorld();
        Jumper j1 = new Jumper();
        j1.setColor(Color.green);
        world.add(j1);
        Jumper j2 = new Jumper();
        j2.setColor(Color.blue);
        world.add(j2);
        world.add(new Flower());
        world.add(new Rock());
        world.add(new Rock());
        world.show();
    }
}
