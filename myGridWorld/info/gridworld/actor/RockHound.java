/* 
 * AP(r) Computer Science GridWorld Case Study:
 * Copyright(c) 2005-2006 Cay S. Horstmann (http://horstmann.com)
 *
 * This code is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation.
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * @author Cay Horstmann
 */

package info.gridworld.actor;

//import info.gridworld.grid.Location;

import java.util.ArrayList;



public class RockHound extends Critter
{
    public void processActors(ArrayList<Actor> actors)
    {
        for (Actor actor : actors)
        {
            if (!(actor instanceof Critter))
                actor.removeSelfFromGrid();
        }
    }


}